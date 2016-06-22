<?php

namespace App\Libraries\Repositories;


use App\Models\Mesa;
use Illuminate\Support\Facades\Schema;

class MesaRepository
{

	/**
	 * Returns all Mesas
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Mesa::all()->where('idRestaurant',1);
	}

	public function search($input)
    {
        $query = Mesa::query()->where('idRestaurant',1);

        $columns = Schema::getColumnListing('mesas');
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
	 * Stores Mesa into database
	 *
	 * @param array $input
	 *
	 * @return Mesa
	 */
	public function store($input)
	{
		return Mesa::create($input);
	}

	/**
	 * Find Mesa by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Mesa
	 */
	public function findMesaById($id)
	{
		return Mesa::find($id);
	}

	/**
	 * Updates Mesa into database
	 *
	 * @param Mesa $mesa
	 * @param array $input
	 *
	 * @return Mesa
	 */
	public function update($mesa, $input)
	{
		$mesa->fill($input);
		$mesa->save();

		return $mesa;
	}
}