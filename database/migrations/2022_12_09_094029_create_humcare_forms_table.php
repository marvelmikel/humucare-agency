<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humcare_forms', function (Blueprint $table) {
        $table->id();
        $table->string('firstName');
        $table->string('lastName');
        $table->string('address');
        $table->string('postCode');
        $table->text('telephoneNo');
        $table->text('insuranceName');
        $table->text('dayTimeTelephone');
        $table->text('mobileTelephone');
        $table->text('dob');
        $table->text('email');
        $table->string('takeEmployment')->nullable();
        $table->string('cleanLicense')->nullable(); 
        $table->string('employeerName')->nullable();
        $table->string('employeerAddress')->nullable();
        $table->string('employeerPostCode')->nullable(); 
        $table->string('employeerTitle')->nullable();
        $table->string('employeerDOA')->nullable();
        $table->string('salary')->nullable();
        $table->string('dept')->nullable();
        $table->longText('dutiesDescription')->nullable();
        $table->string('periodOfNotice')->nullable();
        $table->string('lastDayService')->nullable(); 
        $table->longText('reason4Leaving')->nullable();
        $table->string('nameOfEmployeer2')->nullable();
        $table->string ('employeerAddress2')->nullable();
        $table->string ('employeerPostCode2')->nullable();
        $table->string('employeerPostHeld2')->nullable();
        $table->string('duties2')->nullable();
        $table->string('reason4leaving2')->nullable();
        $table->longText ('dutiesSummary2')->nullable();
        $table->text('university');
        $table->text('course');
        $table->text('qualification');
        $table->text('profQualification');
        $table->text('courseDetails');
        $table->text('membership');
        $table->text ('trainingProgram');
        $table->string('courseDuration');
        $table->longText('personalStatement');
        $table->string('conviction');
        $table->longText('convictionDetails')->nullable();
        $table->boolean('underTaking');
        $table->boolean('disability');
        $table->string('offence')->nullable();
        $table->string('sicknessAbsence')->nullable(); 
        $table->text('refereeName1');
        $table->text('refereePosition1'); 
        $table->string('refereeRelationship1');
        $table->string('refereeOrganization1');
        $table->string('refereeAddress1');
        $table->text('refereePostCode1');
        $table->string('refereeTelephone1');
        $table->text('refereeEmail1');
        $table->string('refereeName2');
        $table->text('refereePosition2');
        $table->string('refereeRelationShip2');
        $table->string('refereeOrganization2');
        $table->string('refereeAddress2');
        $table->text('refereePostCode2'); 
        $table->string('refereeTelephone2');
        $table->text('refereeEmail2');
        $table->boolean('approachReferee');
        $table->text('bankName');
        $table->string('bankBranch');
        $table->string('nameOnCard');
        $table->text('accountNumber');
        $table->text('sortCode');
        $table->text('postApplication');
        $table->text('ethnicGroup');
        $table->text('gender');
        $table->boolean('disabilityConfirm')->nullable();
        $table->text('presentStatus');
        $table->text('age');
        $table->text('passportBirth');
        $table->text('proofOfWork');
        $table->text('proofOfAddress');
        $table->text('originalCertificate');
        $table->text('certificateTraining');
        $table->text('passportPhoto');
        $table->text('bankSocietyDetails');
        $table->text('dbsCertificate');
        $table->text('nationalInsurance');
        $table->text('curriculumVitae');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humcare_forms');
    }
};
