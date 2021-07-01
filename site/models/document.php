<?php

class DocumentPage extends BasePage {

    function getDocumentType() {
        if ($this->parent()->intendedTemplate() == 'poetry') {
            return 'poem';
        }
        if ($this->parent()->intendedTemplate() == 'critique') {
            return 'critique';
        }
    }
}

