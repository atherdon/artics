
Mistakes, that can be avoided.

* Run out of money, when revenue stream are not configured

* Unfocus. Do few things in same time and spend resources not wisely or have conflicts between this things. Each action must complement and develop whole business. Not take time, money, other resources

* Postpone launches for a few month

* Not launch update, because it's "not perfect"

* Loose connection between (live branch) and (future update branch)

* Have a huge plans

* Don't want to change main plan when situation was changed.

Note:
It's important to move updates on livesite, test functionality on your users and then fix issues in fast mode.
In other way - things will really slow down. You must track developers and push them by deadlines. This will help to produce working solution, that is important for right now.


Ex: If you need to create a gun for killing rabbit, you should not to create a plasma gun for killing big mammals.
==================

Step-by-step plan with stages



1) Intro stage. Specification approved by tech lead. With small amount of money - this is backend developer

2) Design stage

3) HTML markup creation stage (Cannot start without designed pages). Can have some issues with elements from design and throw come back to design change for some fixes.

4) Project architecture(Database, API, Forms, Validations, Authentication, Security)

5) All backend working without design - this is part of Project architecture stage. I move it to separate stage, because there always troubles to go from things written at specification to "all pieces working well together"

6) Frontend pages implemented, backend changes done. During this stage you need to be ready make changes at backend part.
When something work good without design - it will broke, or have some mistakes with a new frontend changes. Usually this is not take a lot of time, but you need to be aware that developer can 'stuck' working on some custom functionality. This is cannot be ignored, so owner must track this stage carefully and discuss with developers different options.

7) Tests and fixes stage. Usually, if you want to get stable product - you need to move functionality to live few times.
You must test, how users will react and use your project. And it's important to test cases on "live users". Before this stage all data was entered by developers and this is how project will work in "ideal world". "Live users" will interact with project as they wish - you can catch a lot of issues after going live. And this is good. You must fill a list with errors, that was caused by users - move this list to developers - fix errors - move updates to live site. This cycle can be repeated while you project will work fine for your users.


Notes:
It always can be trouble on 6,7 items

Developer can 'stuck' with vendor API integrations, payment gateways, using some custom modules. This breakdowns always will be and you must be prepared to them. Usually they have place at latest stages or if you don't have a proper management and testing.
