/**
 * Calculate the discount based on user membership and total amount.
 *
 * @param User $user The user object containing membership information.
 * @param float $totalAmount The total amount on which to calculate the discount.
 * @return float The calculated discount.
 */
function calculateDiscount($user, $totalAmount) {
    // If the user isn't a member, they get no discount
    if (!$user->isMember()) {
        return 0;
    }

    // Use a switch statement to handle different membership levels
    switch ($user->membershipLevel) {
        case 'gold':
            // Gold members get 20% off if their total is over $100, otherwise 10%
            return $totalAmount > 100 ? $totalAmount * 0.2 : $totalAmount * 0.1;

        case 'silver':
            // Silver members always get 10% off
            return $totalAmount * 0.1;

        default:
            // If the membership level doesn't match any known type, no discount is applied
            return 0;
    }
}
