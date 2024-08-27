<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Tests\TestCase;

class JobTest extends TestCase
{
    public function test_belongs_to_an_employer(): void
    {
        // Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // Act & Assert
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags(): void
    {
        // Arrange
        $job = Job::factory()->create();

        // Act
        $job->tag('Frontend');

        // Assert
        $this->assertCount(1, $job->tags);
    }
}
