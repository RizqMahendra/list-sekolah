<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\SchoolVerification;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SchoolVerificationTest extends TestCase
{

    use RefreshDatabase;
    use WithFaker;

    public function test_it_can_use_factory_data()
    {
        SchoolVerification::factory()->create([
            'sender_name' => 'Michael'
        ]);

        $this->assertDatabaseCount('school_verification_requests', 1);
        $this->assertDatabaseHas('school_verification_requests', [
            'sender_name' => 'Michael'
        ]);
    }

    public function test_it_can_pass_multiple_image()
    {
        $fake_image = [
            $this->faker->imageUrl(),
            $this->faker->imageUrl(),
            $this->faker->imageUrl(),
        ];

        SchoolVerification::factory()->create([
            'school_photo' => $fake_image
        ]);

        $this->assertDatabaseCount('school_verification_requests', 1);
        $this->assertDatabaseHas('school_verification_requests',[
            'school_photo' => json_encode($fake_image)
        ]);
    }

    public function test_it_can_pass_multiple_social_media()
    {
        $fake_social_media = [
            'facebook' => $this->faker->domainName,
            'twitter' => $this->faker->domainName,
            'instagram' => $this->faker->domainName,
            'whatsapp' => $this->faker->domainName,
        ];

        SchoolVerification::factory()->create([
            'socials' => $fake_social_media
        ]);

        $this->assertDatabaseCount('school_verification_requests', 1);
        $this->assertDatabaseHas('school_verification_requests',[
            'socials' => json_encode($fake_social_media)
        ]);
    }

    public function test_it_can_pass_multiple_operational_hour()
    {
        $fake_operational_hour = [
            'minggu' => [$this->faker->time('H:i'), $this->faker->time('H:i')]
        ];

        SchoolVerification::factory()->create([
            'operational_hour' => $fake_operational_hour
        ]);

        $this->assertDatabaseCount('school_verification_requests', 1);
        $this->assertDatabaseHas('school_verification_requests',[
            'operational_hour' => json_encode($fake_operational_hour)
        ]);
    }

    public function test_route_only_accepted_post_method()
    {
        $response = $this->get('school_verification');
        $response->assertStatus(405);
        $response->assertSee('get method not supported');
    }

    public function test_user_must_fill_required_form()
    {
        $fake_data = ['sender_name' => 'Michael'];

        $this->postJson('school_verification', $fake_data)->assertSee('invalid')->assertStatus(422);
    }

    public function test_user_can_send_school_basic_verification_form_request()
    {
        $school = School::factory()->create();

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_phone' => $this->faker->phoneNumber,
            'school_description' => $this->faker->paragraph(),
            'school_website' => $this->faker->domainName,
            'majors' => $this->faker->sentence,
            'registration_time' => $this->faker->date(),
            'test_results' => $this->faker->sentence
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');
        $this->assertDatabaseHas('school_verification_requests', $fake_data);
    }

    public function test_user_can_send_school_verification_form_request_with_operational_hour()
    {
        $school = School::factory()->create();

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'operational_hour' => [
                'minggu' => [$this->faker->time('H:i'), $this->faker->time('H:i')],
                'senin' => [$this->faker->time('H:i'), $this->faker->time('H:i')]
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');
        $this->assertDatabaseHas('school_verification_requests', [
            'school_id' => $fake_data['school_id'],
            'sender_name' => $fake_data['sender_name'],
            'school_name' => $fake_data['school_name'],
            'position'  => $fake_data['position'],
            'school_accreditation' => $fake_data['school_accreditation'],
            'operational_hour' => json_encode($fake_data['operational_hour'])
        ]);
    }

    public function test_user_can_send_school_verification_form_request_with_cost()
    {
        $school = School::factory()->create();

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'costs' => [
                rand(10000, 999999),
                rand(10000, 999999),
                rand(10000, 999999)
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');
        $this->assertDatabaseHas('school_verification_requests', [
            'school_id' => $fake_data['school_id'],
            'sender_name' => $fake_data['sender_name'],
            'school_name' => $fake_data['school_name'],
            'position'  => $fake_data['position'],
            'school_accreditation' => $fake_data['school_accreditation'],
            'costs' => json_encode($fake_data['costs'])
        ]);
    }

    public function test_user_can_send_school_verification_form_request_with_school_logo()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_logo' => $image
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');

        $this->assertDatabaseHas('school_verification_requests', [
            'school_id' => $fake_data['school_id'],
            'sender_name' => $fake_data['sender_name'],
            'school_name' => $fake_data['school_name'],
            'position'  => $fake_data['position'],
            'school_accreditation' => $fake_data['school_accreditation'],
            'school_logo' => $image->hashName('images')
        ]);

        Storage::disk('public')->assertExists($image->hashName('images'));
    }

    public function test_user_can_send_school_verification_form_request_with_school_photo()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_photo' => [
                $image,
                $image,
                $image
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');

        $image_mapping = array_map(function ($item) {
            return $item->hashName('images');
        }, $fake_data['school_photo']);

        $this->assertDatabaseHas('school_verification_requests', [
            'school_id' => $fake_data['school_id'],
            'sender_name' => $fake_data['sender_name'],
            'school_name' => $fake_data['school_name'],
            'position'  => $fake_data['position'],
            'school_accreditation' => $fake_data['school_accreditation'],
            'school_photo' => json_encode($image_mapping)
        ]);

        Storage::disk('public')->assertExists($image_mapping[0]);
        Storage::disk('public')->assertExists($image_mapping[1]);
        Storage::disk('public')->assertExists($image_mapping[2]);
    }

    public function test_user_can_send_school_verification_form_request_with_socials()
    {
        $school = School::factory()->create();

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'socials' => [
                $this->faker->domainName,
                $this->faker->domainName,
                $this->faker->domainName
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');
        $this->assertDatabaseHas('school_verification_requests', [
            'school_id' => $fake_data['school_id'],
            'sender_name' => $fake_data['sender_name'],
            'school_name' => $fake_data['school_name'],
            'position'  => $fake_data['position'],
            'school_accreditation' => $fake_data['school_accreditation'],
            'socials' => json_encode($fake_data['socials'])
        ]);
    }

    public function test_when_user_request_accepted_by_admin_it_will_deleted_and_merge_data()
    {
        $school = School::factory()->create();

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_phone' => $this->faker->phoneNumber,
            'socials' => [
                'facebook' => $this->faker->domainName,
                'twitter' => $this->faker->domainName,
                'instagram' => $this->faker->domainName
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');
        $this->assertDatabaseHas('school_verification_requests', [
            'school_id' => $fake_data['school_id'],
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $fake_data['school_accreditation'],
            'school_phone' => $fake_data['school_phone'],
            'socials' => json_encode($fake_data['socials'])
        ]);

        $school_verification = SchoolVerification::latest()->first();
        $school_verification->update(['status' => 1]);

        $this->assertDatabaseCount('school_verification_requests', 0);
        $this->assertDatabaseHas('school', [
            'phone' => $fake_data['school_phone'],
            'facebook_url' => $fake_data['socials']['facebook'],
            'twitter_url' => $fake_data['socials']['twitter'],
            'instagram_url' => $fake_data['socials']['instagram']
        ]);
    }

    public function test_school_photo_return_array()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_photo' => [
                $image,
                $image,
                $image
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');

        $image_mapping = array_map(function ($item) {
            return $item->hashName('images');
        }, $fake_data['school_photo']);

        $school_verification = SchoolVerification::latest()->first();

        $this->assertIsArray($school_verification->school_photo);
        $this->assertEquals($image_mapping, $school_verification->school_photo);
    }

    public function test_it_can_overwrite_school_logo_data()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_logo' => $image
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');

        $school_verification = SchoolVerification::latest()->first();

        $school_verification->update(['status' => 1]);

        $this->assertDatabaseHas('school', [
            'logo' => $image->hashName('images')
        ]);
    }

    public function test_it_can_overwrite_school_photo()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_photo' => [
                $image,
                $image,
                $image
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');

        $image_mapping = array_map(function ($photo) {
            return $photo->hashName('images');
        }, $fake_data['school_photo']);

        $school_verification = SchoolVerification::latest()->first();

        $school_verification->update(['status' => 1]);

        $this->assertDatabaseHas('school', [
            'image_one' => $image_mapping[0],
            'image_two' => $image_mapping[1],
            'image_three' => $image_mapping[2]
        ]);
    }

    public function test_when_user_input_school_photo_less_than_three_it_will_use_old_data()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_photo' => [
                $image,
                $image
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertDontSee('invalid');

        $image_mapping = array_map(function ($photo) {
            return $photo->hashName('images');
        }, $fake_data['school_photo']);

        $school_verification = SchoolVerification::latest()->first();

        $school_verification->update(['status' => 1]);

        $school = School::latest()->first();

        $this->assertEquals([
            $image_mapping[0],
            $image_mapping[1],
            $school->image_three
        ], [
            $school->image_one,
            $school->image_two,
            $school->image_three
        ]);
    }

    public function test_input_school_photo_must_image()
    {
        $school = School::factory()->create();

        $image = UploadedFile::fake()->image('testing.jpg');

        $fake_data = [
            'school_id' => $school->id,
            'sender_name' => 'Dadang Hermawan',
            'school_name' => 'ITB STIKOM BALI',
            'position'  => 'Rektor',
            'school_accreditation' => $school->accreditation_id,
            'school_photo' => [
                null,
                $image,
                null
            ]
        ];

        $this->postJson('school_verification', $fake_data)->assertSee('invalid');
    }
}
