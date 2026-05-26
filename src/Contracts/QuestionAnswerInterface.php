<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface QuestionAnswerInterface
{
    public function getQuestion(): string;
    public function getAnswers(): array;
}
