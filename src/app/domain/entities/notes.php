<?php

abstract class Notes{

    private $notes;

	public function getNotes() {
		return $this->notes;
	}
	public function setNotes($notes): self {
		$this->notes = $notes;
		return $this;
	}
}

?>