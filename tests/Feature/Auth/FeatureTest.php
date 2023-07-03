<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;

    /** @test */
    public function user_can_register()
    {
        // Kunjungi halaman '/register'
        $this->visit('/register');

        // Submit form register dengan name, email dan password
        $this->submitForm('register', [
            'username'              => 'John',
            'email'                 => 'john@gmail.com',
            'password'              => 'secret',
        ]);

        // Lihat halaman ter-redirect ke url '/home' (register sukses).
        $this->seePageIs('/home');

        // Kita melihat halaman tulisan "home" pada halaman itu.
        $this->seeText('home');

        // Lihat di database, tabel users, data user yang register sudah masuk
        $this->seeInDatabase('users', [
            'name'  => 'John',
            'email' => 'john@gmail.com',
        ]);

        // Cek hash password yang tersimpan cocok dengan password yang diinput
        $this->assertTrue(app('hash')->check('secret', user::first()->password));
    }

    public function user_can_update()
    {
        // Update data user yang sudah register tadi
        $update_register = user::find($user->id)->update([
            'username' => 'Don',
            'email' =>'don@gmail.com',
            'password' => 'don123',
        ]);

        // Cek apakah datanya benar sudah diupdate atau tidak
        $this->assertDatabaseHas('users', [
            'username' => 'Don',
            'email' => 'don@gmail.com'
         ]);
    }

    public function user_can_delete()
    {
        // Hapus data user
        user::destroy($user->id);
    }
}
