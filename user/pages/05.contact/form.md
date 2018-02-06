---
title: 'Contact Form'
menu: Contact
form:
    name: contact
    classes: row
    fields:
        -
            name: 'First Name'
            label: false
            placeholder: 'First name'
            autocomplete: 'on'
            classes: form-control
            type: text
            validate:
                required: true
        -
            name: 'Last Name'
            label: false
            placeholder: 'Last name'
            autocomplete: 'on'
            classes: form-control
            type: text
            validate:
                required: true
        -
            name: 'Email address'
            label: false
            placeholder: 'Email address'
            type: email
            classes: form-control
            validate:
                required: true
        -
            name: 'Phone Number'
            label: false
            placeholder: 'Phone number'
            type: number
            classes: form-control
            validate:
                required: true
        -
            name: Message
            label: false
            placeholder: 'Enter your message here'
            type: textarea
            classes: form-control
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Send
        -
            type: reset
            value: Reset
    process:
        -
            email:
                subject: '[New Site Contact | Nina''s Wellness] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: d-m-Y-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for getting in touch!'
        -
            display: thankyou
---

## Contact Me

I love connecting with Mums To Be or New Mums so sign up here for my specialist modern pre and post natal e-newsletters full of fitness tips and nutritious food ideas to help you during your pregnancy and beyond.

