## URLs

- Event Configuration Form (Admin):
  /admin/config/event-registration

- Event Registration Form (User):
  /event/register

- Admin Registration Listing:
  /admin/event-registrations

## Validation Logic

- Duplicate registrations are prevented using Email + Event Date combination.
- Email field is validated using Drupal email validation.
- Special characters are restricted in text fields.
- User-friendly error messages are shown on validation failure.

## AJAX Logic

- Event Date dropdown updates dynamically based on selected category.
- Event Name dropdown updates dynamically based on selected category and date.
- AJAX callbacks are implemented using Drupal Form API.

## Email Logic

- Confirmation email is sent to the user after successful registration.
- Admin notification email is sent if enabled in configuration.
- Emails include:
  - Name
  - Event Name
  - Event Date
  - Category
- Drupal Mail API is used for sending emails.

