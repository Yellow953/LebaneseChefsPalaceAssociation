<?php

namespace App\Helpers;

use App\Models\Group;

class Helper
{
    public static function get_user_roles()
    {
        return ['user', 'admin'];
    }

    public static function get_restaurants_types()
    {
        return [
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
    }

    public static function get_restaurants_certification_statuses()
    {
        return [
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
    }

    public static function get_chefs_ranks()
    {
        return [
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
    }

    public static function get_groups()
    {
        return Group::select('id', 'name')->get();
    }

    public static function get_insurance_statuses()
    {
        return ['active', 'expired', 'canceled'];
    }

    public static function get_record_categories()
    {
        return ['Food', 'Hotels', 'Hospitality'];
    }

    public static function get_units()
    {
        return [
            'Square Feet',
            'Square Meters',
            'Feet',
            'Meters',
            'People',
            'Meals',
            'Stars',
            'Seconds',
            'Minutes',
            'Hours',
            'Days',
            'Dollars',
            'Kilograms',
            'Liters',
            'Bottles'
        ];
    }

    public static function get_event_statuses()
    {
        return [
            'Scheduled',
            'Confirmed',
            'Pending Approval',
            'Ongoing',
            'Completed',
            'Cancelled',
            'Postponed',
            'Rescheduled',
            'Draft',
            'Closed',
        ];
    }
}
