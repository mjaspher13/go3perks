<?php 

use Illuminate\Contracts\Encryption\DecryptException;

function HELPERDoubleEncrypt ($value) 
{
    $value = Crypt::encryptString($value);
    return Crypt::encryptString($value);
}

function HELPERDoubleDecrypt ($value) 
{

    try {
        $value = Crypt::decryptString($value);
        $value = Crypt::decryptString($value);
    } catch (DecryptException $e) {
        $value = "InvalidKey";
    }

    return $value;
}


function HELPERCountries () 
{

    if (Cache::has('countries'))
    {
        $countries = Cache::get('countries');
    }

    else 
    {
        $countries = Cache::remember('countries', 22*60, function() 
        {

        $countries = app('pragmarx.countries');

        return $countries = $countries->all()->pluck('name.common');

        });
    }
  
    return $countries;

}

function HELPERStates ($country)
{
    // if (Cache::has($country))
    // {
    //     $states = Cache::get($country);
    // }

    // else 
    // {
    //     $states = Cache::put($country, 22*60, function() 
    //     {

            $countries = app('pragmarx.countries');

            return $states = $countries->where('name.common', $country)
            ->first()
            ->states
            ->sortBy('name')
            ->pluck('name');

    //     });
    // }

    // return $states;
}

function HELPERCities ($state)
{
    $countries = app('pragmarx.countries');

    return $cities = $countries->where('name.common', 'United States')
    >first()
    ->hydrate('cities')
    ->cities;
    

}

?>