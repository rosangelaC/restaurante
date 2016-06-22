<?php

namespace App\Libraries\Repositories;


use App\Models\Pedido;
use Illuminate\Support\Facades\Schema;

class PedidoRepository
{

	/**
	 * Returns all Pedidos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Pedido::all();
	}

	public function search($input)
    {
        $query = Pedido::query();

        $columns = Schema::getColumnListing('pedidos');
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
	 * Stores Pedido into database
	 *
	 * @param array $input
	 *
	 * @return Pedido
	 */
	public function store($input)
	{
		return Pedido::create($input);
	}

	/**
	 * Find Pedido by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Pedido
	 */
	public function findPedidoById($id)
	{
		return Pedido::find($id);
	}

	/**
	 * Updates Pedido into database
	 *
	 * @param Pedido $pedido
	 * @param array $input
	 *
	 * @return Pedido
	 */
	public function update($pedido, $input)
	{
		$pedido->fill($input);
		$pedido->save();

		return $pedido;
	}
}