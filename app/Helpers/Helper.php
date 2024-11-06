<?php

namespace App\Helpers;

use App\Models\Group;

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

    public static function get_chefs_ranks()
    {
        $chefRanks = [
            'Executive Chef',
            'Head Chef',
            'Sous Chef',
            'Chef de Partie',
            'Junior Chef',
            'Commis Chef',
            'Pastry Chef',
            'Saucier (Sauce Chef)',
            'Poissonnier (Fish Chef)',
            'Rotisseur (Roast Chef)',
            'Grillardin (Grill Chef)',
            'Entremetier (Vegetable Chef)',
            'Garde Manger (Pantry Chef)',
            'Tournant (Relief Chef)',
            'Butcher',
            'Apprentice Chef',
        ];
        return $chefRanks;
    }

    public static function get_groups()
    {
        return Group::select('id', 'name')->get();
    }
}
