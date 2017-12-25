Database with data(trainers, activity) must be imported from the start.

Project will have 3 main roles with different dashboards, pages: User, Trainer, Admin 

First trainers and users can be imported to database.

Calendar with incoming events, related to your project. It must have filtration by types, categories, dates, etc.

I think the best(read fast) it will be start from events. This events will be displayed on your website.
This is not what you want most, but using this way you’ll start to grow your website, you’ll attract first users. You’ll be able to store user emails.
Then you’ll have ability send newsletters after event finished with rating functionality. So you’ll start to store locations, ratings, user data.

If we’ll go by my plan - you’ll be able to launch first part with events in 1 month. You also start to understand how to manage this project, you’ll need to search events and add them to database.

## Booking functionality will be posted in another article later.

For booking we’ll have 3 working options.
Inner users, they’ll search events inside your network
Personal advertising from trainers - users will go to your network from trainer. Will be got to have a outer place for trainer profile.
People, who train with trainer on daily basis and trainer decide to move them to your system because it more manageable
It will be like small sub-project on your application


## Admin
~ edit user
~ trainer management
~ event management

##Email templates(additional document)
~ invite to events
~ invite to friends
~ weekly newsletter
~ invite to groups

## Pages(views) list
Events list by town. Apply to event

`admin side`
User management, trainer management
Edit
Add ability to see users, related to trainer
Event Management
Support, contact messages(maybe)

## Trainer pages
Dashboard
Profile
Subscription
  - Checkout
  - Thank you page - after payment
Logout
Sign up user

Schedule Training Appointment
  - Add appointment
  - Edit appointment
  - Cancel
Manage(Create/Edit/View)
Trainer profile
Activities
Schedule calendar
User list related to trainer

Events
Ratings
Manage(Edit/Delete)   
  - Information (complex)
  - Appointments (complex)
    - Next appointment
    - Finish appointment

## Member profile
Trainings
Events
Training/Events calendar(display trainings, events, past and future)
Users to follow(after entering interests,town) - users list filtered by towns/interests with button follow.
Events list by town

DB entities
Appointment
Events
Activities( can be single, can be multiple. )
Trainer/User profiles
Reviews( id, type, score )
Rewards( reward list, single reward, user rewards, scoreboards )

Questions
Do you need fitness trackers integrations?
Do you need alerts or timers?
Do you need to setup newsletter?
Can one user belong to a few different trainer?
Can different trainers belong to one fitness center?
If one trainer is ill, can he move user appointment to another trainer?
Can trainer create a new user?
Can you give me more details for activities/rewards logic. 
Can I delete user? All stored user data erased?
Enable cookies?
When appointment was successfully scheduled - do we need to send email for professional mail address, after appointment submit? Integration with Google Calendar, iCal, Yahoo Calendar? 
Do you need affiliate system? So for friend invites you can give gifts. 
Do you want to have advertising or promotion things? So default trainings cost $x but special offers have discount 20%. 
Do we need to store information for each users, but please explain what information must be. 
Did you have completed app design or this was an example? 
Chat must be 1-to-1 or you want to have more custom functionality?
How do you will handle support? Will you have helpdesk where I’ll be able to read some information and solve my problems with your project. 
Do you need to have recurring events? If yes, you'll need to use Stripe payment gateway. 
Do you want to import friends from social networks?
Only adults will participate on your events? Or childs too? If you want to train children - how you’ll check that trainer have a special education? Do you want to have some verification process?


Trainer related questions.

How payments will be handled? On event place or via application?
How you want to store client money?
How you’ll handle money back situations?
How you’ll send money to trainers?




Features
Competition (by types, by cities, by states, by country)
Community search
Search by place, by interests.
Filtration by: age, sex, workout skills( new, few times per week, few years of trainings, pro/trainer )
Training type( bike, running,  basketball, swimming, soccer, baseball, tennis, box, gym / workout )



Notes 


Big question about activity and what do you want to put on this term. Please describe me about activity. If i run 30 minutes - this is activity? How this can be compared with other activities. What is better - 4 hours on bike or run 1 hour. And how this can be counted.

I think you want to add gamification to your application. This is cool and motivate your users move forward. I know few startups, that give ability to create list of rewards, scores, score boards. I think you need to create a list of rewards and share with me

We need to discuss what will be included at trainer profile. Biography? Study place? Do we need to display results, accomplishments. Do we need to display certificates, completed trainings. I can create something, but want to hear your thoughts. 

Add rating to trainer functionality. Send notifications to event participators after event finished. Will be generated a custom link using user_id and event_id. This will prevent fake submissions. You can rate event, facility, and see a friend list.

Do we need to have functionality for money back, for setting a bad review for trainer? Can user send a complaint and trainer can send appear?

You mentioned, “agencies, businesses”. You want to create accounts for fitness centers with trainers inside them?

It will be cool to have place related to food. So trainer can track my food and control what I’m eat if I have a weight loss goal.

When I got an invite to event - I need to receive email or push notification.

If you’ll have payments, you’ll need to store billing address, send invoices, store orders in order history.


Ideas
I propose to import data from Apple iHealth or Apple Watches.



