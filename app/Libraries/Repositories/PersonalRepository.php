<?php

namespace App\Libraries\Repositories;


use App\Models\Personal;
use Illuminate\Support\Facades\Schema;

class PersonalRepository
{

	/**
	 * Returns all Personals
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Personal::all()->where('idRestaurant',1);
	}

	public function search($input)
    {
        $query = Personal::query()->where('idRestaurant',1);

        $columns = Schema::getColumnListing('personals');
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
	 * Stores Personal into database
	 *
	 * @param array $input
	 *
	 * @return Personal
	 */
	public function store($input)
	{
		return Personal::create($input);
	}

	/**
	 * Find Personal by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Personal
	 */
	public function findPersonalById($id)
	{
		return Personal::find($id);
	}

	/**
	 * Updates Personal into database
	 *
	 * @param Personal $personal
	 * @param array $input
	 *
	 * @return Personal
	 */
	public function update($personal, $input)
	{
		$personal->fill($input);
		$personal->save();

		return $personal;
	}
}