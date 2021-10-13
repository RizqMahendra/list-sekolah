<?php

namespace App\Observers;

use App\Models\SchoolVerification;

class SchoolVerificationObserver
{
    /**
     * Handle the SchoolVerification "created" event.
     *
     * @param  \App\Models\SchoolVerification  $schoolVerification
     * @return void
     */
    public function created(SchoolVerification $schoolVerification)
    {
        //
    }

    /**
     * Handle the SchoolVerification "updated" event.
     *
     * @param  \App\Models\SchoolVerification  $schoolVerification
     * @return void
     */
    public function updated(SchoolVerification $schoolVerification)
    {
        if ($schoolVerification->status) {

            // copy data to school table
            $schoolVerification->updateDataSchool($schoolVerification->school);
            $schoolVerification->delete();
        }
    }

    /**
     * Handle the SchoolVerification "deleted" event.
     *
     * @param  \App\Models\SchoolVerification  $schoolVerification
     * @return void
     */
    public function deleted(SchoolVerification $schoolVerification)
    {
        //
    }

    /**
     * Handle the SchoolVerification "restored" event.
     *
     * @param  \App\Models\SchoolVerification  $schoolVerification
     * @return void
     */
    public function restored(SchoolVerification $schoolVerification)
    {
        //
    }

    /**
     * Handle the SchoolVerification "force deleted" event.
     *
     * @param  \App\Models\SchoolVerification  $schoolVerification
     * @return void
     */
    public function forceDeleted(SchoolVerification $schoolVerification)
    {
        //
    }
}
