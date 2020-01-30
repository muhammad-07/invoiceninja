<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Policies;

use App\Models\Expense;
use App\Models\User;

/**
 * Class ExpensePolicy
 * @package App\Policies
 */
class ExpensePolicy extends EntityPolicy
{
    /**
     *  Checks if the user has create permissions
     *
     * @param  User $user
     * @return bool
     */
    public function create(User $user) : bool
    {
        return $user->isAdmin() || $user->hasPermission('create_expense') || $user->hasPermission('create_all');
    }
}