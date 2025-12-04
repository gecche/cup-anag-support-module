<?php

namespace Modules\CupAnagSupport\Policies;

use App\Models\User;
use App\Models\CupAnagSupportProfessione;
use Gecche\PolicyBuilder\Facades\PolicyBuilder;
use Illuminate\Auth\Access\HandlesAuthorization;

class CupAnagSupportProfessionePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupAnagSupportProfessione  $model
     * @return mixed
     */
    public function view(User $user, CupAnagSupportProfessione $model)
    {
        //
        if ($user && $user->can('view cup_anag_support_professione')) {
            return true;
        }

        return false;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        if ($user && $user->can('create cup_anag_support_professione')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupAnagSupportProfessione  $model
     * @return mixed
     */
    public function update(User $user, CupAnagSupportProfessione $model)
    {
        //
        if ($user && $user->can('edit cup_anag_support_professione')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupAnagSupportProfessione  $model
     * @return mixed
     */
    public function delete(User $user, CupAnagSupportProfessione $model)
    {
        //
        if ($user && $user->can('delete cup_anag_support_professione')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function listing(User $user)
    {
        //
        if ($user && $user->can('listing cup_anag_support_professione')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function acl(User $user, $builder)
    {

        if ($user && $user->can('view cup_anag_support_professione')) {
            return PolicyBuilder::all($builder,CupAnagSupportProfessione::class);
        }

        return PolicyBuilder::none($builder,CupAnagSupportProfessione::class);

    }
}
