#Introduction

This is the PHP API Wrapper that allows developers to access the Capsule CRM API using PHP.

It is forked from the Service_Capsule library.

#Disclaimer

This is still a work in progress and is far from finished.

Most work so far has concentrated on improving the core functionality of parties,people and organisations.

Although forked from the Service_Capsule library, do not expect to be able to drop this library straight into your project, as many behaviours and responses have been altered.

#Changelog:

Changes to Custom Fields

The following Methods have been removed:

party->customfield->get
party->customfield->add
party->customfield->update
party->customfield->delete

kase->customfield->get
kase->customfield->add
kase->customfield->update
kase->customfield->delete

opportunity->customfield->get
opportunity->customfield->add
opportunity->customfield->update
opportunity->customfield->delete

party->people->getAll
party->cases->getAll
party->cases->Add
party->cases->update

The following methods have been added:

party->customfields->get
party->customfields->set

kase->customfields->get
kase->customfields->set

opportunity->customfields->get
opportunity->customfields->set

party->listPeople
party->listCases

Added support to return a response in 3 extra formats:

XML - Returns a SimpleXMLElement
JSON - Returns results as JSON
ARRY - Returns an Array

Added support to pass either an Array or an stdClass object into add/update methods.