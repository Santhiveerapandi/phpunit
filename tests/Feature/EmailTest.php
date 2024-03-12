<?php

namespace Tests\Feature;

use App\Mail\CheckingEMailSent;
use App\Mail\UserEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_email_content(): void
    {
        // $user = User::factory()->create();
 
        $mailable = new UserEmail();//InvoicePaid($user);
    
        /* $mailable->assertFrom('jeffrey@example.com');
        $mailable->assertTo('taylor@example.com');
        $mailable->assertHasCc('abigail@example.com');
        $mailable->assertHasBcc('victoria@example.com');
        $mailable->assertHasReplyTo('tyler@example.com'); */
        $mailable->assertHasSubject('User Email');
        // $mailable->assertHasTag('example-tag');
        // $mailable->assertHasMetadata('key', 'value');
    
        // $mailable->assertSeeInHtml($user->email);
        $mailable->assertSeeInHtml('Welcome');
        $mailable->assertSeeInOrderInHtml(['Welcome', 'Thanks']);
    
        // $mailable->assertSeeInText($user->email);
        $mailable->assertSeeInOrderInText(['Welcome', 'Thanks']);
    
        /* $mailable->assertHasAttachment('/path/to/file');
        $mailable->assertHasAttachment(Attachment::fromPath('/path/to/file'));
        $mailable->assertHasAttachedData($pdfData, 'name.pdf', ['mime' => 'application/pdf']);
        $mailable->assertHasAttachmentFromStorage('/path/to/file', 'name.pdf', ['mime' => 'application/pdf']);
        $mailable->assertHasAttachmentFromStorageDisk('s3', '/path/to/file', 'name.pdf', ['mime' => 'application/pdf']); */
    }

    /* public function test_email_send(): void
    {
        Mail::fake();
 
        // Perform order shipping...
 
        // Assert that no mailables were sent...
        // Mail::assertNothingSent();
 
        // Assert that a mailable was sent...
        Mail::assertSent(UserEmail::class);
 
        // Assert a mailable was sent twice...
        Mail::assertSent(UserEmail::class, 2);
 
        // Assert a mailable was not sent...
        // Mail::assertNotSent(CheckingEMailSent::class);
 
        // Assert 3 total mailables were sent...
        // Mail::assertSentCount(2);
    } */ 
}
