<?php
namespace App\CustomHelpers\User;
use App\Tenant;
use Carbon\Carbon;

class TenantFilter
{
    /**
    * Get Tenants ordered based on supplied filters.
    *
    * @param   $sortField and $orderBy
    * @return  $Tenants
    */
    public static function getTenantsByOrder( $filters = [] )
    {
       
    }

    /**
     * Get Tenants created on a certain date.
     *
     * @param   $date
     * @return  $Tenants
     */
    public static function getTenantsByDate( $date = null )
    {
    
    }

    /**
      * Get Tenants created during specific dates.
      *
      * @param   $startDate and $endDate
      * @return  $Tenants
      */
      public static function getTenantsBySpecificDate( $filters = [] )
      {
          
      }  

}