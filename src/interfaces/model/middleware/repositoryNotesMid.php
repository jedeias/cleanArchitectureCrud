<?php 

class RepositoryNotesMid{

    private repositoryNotesInterface $repository;

    public function __construct() {
        $this->repository = new RepositiryNotes;
    }

    final function saveNote(Note $note) : void {
        $this->repository->save($note);
    }

    final function updateNote(Note $note) : void {
        $this->repository->update($note);
    }

    final function deleteNote($id) : void {
        $this->repository->delete($id);
    }

    final function getNoteById($id) : array {
        return $this->repository->getById($id);
    }

}

?>