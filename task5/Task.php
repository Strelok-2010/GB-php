<?php
class Task
{
    private string $description;
    private int $priority;
    private DateTime $dataCreated;
    private DateTime $dataUpdated;
    private DateTime $dataDone;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];


    public function __construct(User $user, string $description = 'description', int $priority = 1)
    {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->data = new DateTime();
    }

    public function markAsDone(): void
    {
        $this->setDateUpdated(new DateTime);
        $this->setDateDone(new DateTime);
        $this->setIsDone();
    }

    public function setDescription(string $description): void
    {
        $this->setDateUpdated(new DateTime);
        $this->description = $description;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    private function setIsDone(float $price): void
    {
        $this->isDone = true;
    }

    public function setUser(User $user): void
    {
        $this->user =$user;
    }

    private function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->$dateUpdated =$dateUpdated;
    }

    private function setDateDone(DateTime $dateDone): void
    {
        $this->$dateDone =$dateDone;
    }

    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function getDescription(): string
    {
        return $this->description;
    }


}

