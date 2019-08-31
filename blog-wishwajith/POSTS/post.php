<?php

	Class POST{

		public $id;
		public $content;
		public $date_created;
		public $author;
		public $feedback_count;

		public function __construct($id, $content, $date_created, $author, $feedback_count){

			$this->id = $id;
			$this->content = $content;
			$this->date_created = $date_created;
			$this->author = $author;
			$this->feedback_count = $feedback_count;
		}

	}

?>