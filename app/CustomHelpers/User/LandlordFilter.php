<?php
namespace App\CustomHelpers\User;
use App\Landlord;
use Carbon\Carbon;

class LandlordFilter
{
    /**
    * Get Landlords ordered based on supplied filters.
    *
    * @param   $sortField and $orderBy
    * @return  $Landlords
    */
    public static function getLandlordsByOrder( $filters = [] )
    {
       
    }

    /**
     * Get Landlords created on a certain date.
     *
     * @param   $date
     * @return  $Landlords
     */
    public static function getLandlordsByDate( $date = null )
    {
    
    }

    /**
      * Get Landlords created during specific dates.
      *
      * @param   $startDate and $endDate
      * @return  $Landlords
      */
      public static function getLandlordsBySpecificDate( $filters = [] )
      {
          
      }  

}