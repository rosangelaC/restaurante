<?php

namespace App\Libraries\Repositories;


use App\Models\Categoria;
use Illuminate\Support\Facades\Schema;

class CategoriaRepository
{

	/**
	 * Returns all Categorias
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Categoria::all()->where('idRestaurant',1);
	}

	public function search($input)
    {
        $query = Categoria::query()->where('idRestaurant',1);

        $columns = Schema::getColumnListing('categorias');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };
        return [$query->get(), $attributes];
    }

	/**
	 * Stores Categoria into database
	 *
	 * @param array $input
	 *
	 * @return Categoria
	 */
	public function store($input)
	{
		return Categoria::create($input);
	}

	/**
	 * Find Categoria by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Categoria
	 */
	public function findCategoriaById($id)
	{
		return Categoria::find($id);
	}

	/**
	 * Updates Categoria into database
	 *
	 * @param Categoria $categoria
	 * @param array $input
	 *
	 * @return Categoria
	 */
	public function update($categoria, $input)
	{
		$categoria->fill($input);
		$categoria->save();
		return $categoria;
	}
}