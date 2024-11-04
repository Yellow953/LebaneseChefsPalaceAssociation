<?php

namespace App\Helpers;

class Helper
{
    public static function get_user_roles()
    {
        $roles = ['user', 'admin'];
        return $roles;
    }

    public static function get_restaurants_types()
    {
        $restaurantTypes = [
            'Fine Dining',
            'Casual Dining',
            'Fast Food',
            'Café',
            'Buffet',
            'Food Truck',
            'Bistro',
            'Pizzeria',
            'Steakhouse',
            'Seafood Restaurant',
            'Bakery',
            'Diner',
            'Family Style',
            'Barbecue',
            'Ethnic',
            'Brasserie',
            'Pub',
            'Gastro Pub',
            'Sushi Bar',
            'Dessert Bar',
            'Pop-Up Restaurant',
            'Farm-to-Table',
            'Vegetarian',
            'Vegan',
            'Tapas Bar',
            'Grill House',
            'Tearoom',
            'Ice Cream Parlor',
            'Canteen',
            'Drive-In',
        ];
        return $restaurantTypes;
    }

    public static function get_restaurants_certification_statuses()
    {
        $certificationStatuses = [
            'Not Certified',
            'Certified',
            'Pending Certification',
            'Certification Expired',
            'Certification Revoked',
            'Under Review',
            'Provisional Certification',
            'Temporarily Suspended',
            'Awaiting Renewal',
            'Certified with Distinction',
        ];
        return $certificationStatuses;
    }
}
