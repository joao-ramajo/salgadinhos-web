<?php

declare(strict_types=1);

namespace App\Domain\Comment;

use Symfony\Component\HttpFoundation\Request;

class CreateCommentInput
{
    public function __construct(
        public readonly string $content,
        public readonly int $snackId,
        public readonly ?int $userId = null
    ) {
    }

    public static function create(
        string $content,
        int $snackId,
        ?int $userId = null
    ): self {
        return new self(
            content: $content,
            snackId: $snackId,
            userId: $userId
        );
    }
}
