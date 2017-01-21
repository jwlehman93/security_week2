# Project 2 - Globitek Input/Output Sanitization

Time spent: **8** hours spent in total

## User Stories

The following **required** functionality is completed:


The following advanced user stories are optional:

- [x] Import starting database

- [x] Set up starting

---

- [x] Staff CMS for Users
  - [x] index.php
    - [x] Displays a list of all users in the database.
    - [x] There is a link labeled "Add a User" at the top of the page.
    - [x] Each user row has two links labeled "Show" and "Edit"
    - [x] On the page is a link labeled "Back to Menu" which links to the main menu.
  - [x] show.php
    - [x] Displays the user's full name, username, and email address.
    - [x] On the page is a link labeled "Edit" which links to the appropriate page.
    - [x] On the page is a link labeled "Back to List" which links to the list of users.
  - [x] new.php
    - [x] Displays a form for adding a new user.
    - [x] The form includes text inputs for first name, last name, username, and email address.
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, the form will display again with current values filled in and errors listed.
    - [x] If validations pass, a new user will be added to the table and redirect to the user's information page.
    - [x] On the page is a link labeled "Back to List" which links to the list of users.
  - [x] edit.php
    - [x] Displays a form for editing an existing user.
    - [x] The form includes inputs for first name, last name, username, and email address.
    - [x] The form is pre-populated with the user's current values.
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, the form will display again with current values filled in and errors listed.
    - [x] If validations pass, it will update the user's data in the table and redirect to the user's information page.
    - [x] On the page is a link labeled "Cancel" which links to the user's information page.

---
- [x] Staff CMS for Salespeople
  - [x] index.php
    - [x] Displays a list of all salespeople in the database.
    - [x] There is a link labeled "Add a Salesperson" at the top of the page.
    - [x] Each user row has two links labeled "Show" and "Edit"
    - [x] On the page is a link labeled "Back to Menu" which links to the main menu.
  - [x] show.php
    - [x] Displays the salesperson's full name, phone, and email address.
    - [x] On the page is a link labeled "Edit" which links to the appropriate page.
    - [x] On the page is a link labeled "Back to List" which links to the list of salespeople.
  - [x] new.php
    - [x] Displays a form for adding a new salesperson.
    - [x] The form includes text inputs for first name, last name, phone, and email address.
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, the form will display again with current values filled in and errors listed.
    - [x] If validations pass, a new salesperson will be added to the table and redirect to the salesperson's information page.
    - [x] On the page is a link labeled "Back to List" which links to the list of salespeople.
  - [x] edit.php
    - [x] Displays a form for editing an existing salesperson.
    - [x] The form includes inputs for first name, last name, phone, and email address.
    - [x] The form is pre-populated with the salesperson's current values.
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, the form will display again with current values filled in and errors listed.
    - [x] If validations pass, it will update the salesperson's data in the table and redirect to the user's information page.
    - [x] On the page is a link labeled "Cancel" which links to the salesperson's information page.

---
- [x] Staff CMS for State
  - [x] index.php
    - [x] Displays a list of all states in the database.
    - [x] There is a link labeled "Add a State" at the top of the page.
    - [x] Each user row has two links labeled "Show" and "Edit"
    - [x] On the page is a link labeled "Back to Menu" which links to the main menu.
  - [x] show.php
    - [x] Displays a state's name, abbreviation code, and a list of the names of its territories. The territories list includes the territory name and is sorted by position.
    - [x] Each territory name is a link to a page to view more information about the territory.
    - [x] On the page is a link labeled "Edit" which links to the appropriate page.
    - [x] On the page is a link labeled "Back to List" which links to the list of states.
    - [x] Below the territory list is a link labeled "Add a Territory" which is a link to the form for adding a new territory.
  - [x] new.php
    - [x] Displays a form for adding a new state.
    - [x] The form includes text inputs for name and code
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, the form will display again with current values filled in and errors listed.
    - [x] If validations pass, a new state will be added to the table and redirect to the salesperson's information page.
    - [x] On the page is a link labeled "Back to List" which links to the list of states.
  - [x] edit.php
    - [x] Displays a form for editing an existing state.
    - [x] The form includes inputs for code and name.
    - [x] The form is pre-populated with the state's current values.
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, the form will display again with current values filled in and errors listed.
    - [x] If validations pass, it will update the state's data in the table and redirect to the user's information page.
    - [x] On the page is a link labeled "Cancel" which links to the state's information page.

---
- [x] Staff CMS for Territories:
  - [x] index.php
    - [x] Redirects all requests to the main menu.
  - [x] show.php
    - [x] Displays a territory's name, state_id, position.
    - [x] On the page is a link labeled "Edit" which links to the appropriate page.
    - [x] On the page is a link labeled "Back to State Details" which links to the state's information page.
  -[x] new.php
    - [x] Displays a form for adding a new territory to this state.
    - [x] The form includes text inputs for name and position.
    - [x] It does not have a state or state_id input. (The state ID should be present in form action URL and not in a form value.)
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, it will display the form again with errors listed.
    - [x] If validations pass, it will add a territory to the table and redirect to the territory's information page. Important note: it should automatically assign the new territory to the current state.
    - [x] On the page is a link labeled "Back to State Details" which links to the state's information page.
  - [ ] edit.php
    - [x] Displays a form for editing an existing territory.
    - [x] The form includes inputs for name and position.
    - [x] The form is pre-populated with the territory's current values.
    - [x] It does not have an input for changing the territory's state assignment.
    - [x] Submitting the form will validate the data. (See validation details below.)
    - [x] If validations fail, it will display the form again with errors listed.
    - [x] If validations pass, it will update the territory's data in the table and redirect to the territory's information page.
    - [x] On the page is a link labeled "Cancel" which links to the territory's information page.

---

- [x] Validations
  - [x] Validate that no values are left blank.
  - [x] Validate that all string values are less than 255 characters long (because that is the maximum size for our SQL columns).
  - [x] Validate that usernames contain only the whitelisted characters: A-Z, a-z, 0-9, and \_.
  - [x] Validate that phone numbers contain only the whitelisted characters: 0-9, spaces, and ()-.
  - [x] Validate that email addresses contain only whitelisted characters: A-Z, a-z, 0-9, and @.\_-.
  - [x] Add at least 5 other validations of your choosing. Consider what would be useful attributes to validate. Graders will be interested in the utility of the validation as much as the code execution. Add a code comment above each validation that says "My custom validation" (to make it easy to locate during grading).
    1. Improve email validation to take into account if there is a period, where it is located, and if there are letters around it.
    2. Validate that phone numbers have between 4 and 13 characters.
    3. Validate US State Codes can only be two digits.
    4. Validate State Codes must be alphabtical.
    5. Validate territory position is not the same as another territory in the same state;

---
- [x] Sanitization
  - [x] All input and dynamic output should be sanitized.
  - [x] Be sure to sanitize dynamic data when used for:
    - URLs
    - HTML
    - SQL

---

- [ ] Penetration Testing
  - [x] Verify that all form text inputs are not vulnerable to SQLI attacks.
  - [ ] Verify that all URL query strings are not vulnerable to SQLI attacks.
  - [ ] Verify that all form text inputs are not vulnerable to XSS attacks.
  - [ ] Verify that all URL query strings are not vulnerable to XSS attacks.
  - [ ] Make a list of any other bugs or security vulnerabilities you are able to trigger by putting well-crafted data into a form value, in a query string, or in the database data.

The following **optional** features are implemented:

The following **additional** features are implemented:

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Jeremy Lehman]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
