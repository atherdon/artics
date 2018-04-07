### Story behind
Ok, main goal of creating another repository is to separate frontend logic of GroceriStar project with API logic.
Right now, at current project stage it's looks like a mess. 
Project is simple, but it must be improved before complexity will grow. So i dig into different options with question - how i can improve 'flow' when client and server are separated, files have good structure, project have `build` feature and can be updated/extended easily.
All times, when i read articles I see that only React with Webpack provide such kind of functionality. So i decide that in future i'll split front and API into a two different projeccts.


## Big picture
Whole frontend must be recreated from scratch, tested and then connected to a GS project.
Design must be improved, pages must load fast, scripts must be organized, minified and combined together. Responsive for sure.

## From what we can start.
Right now we have an ugly homepage. Yep it bad, cause i created it from landing page builder. 
I didn't want to spend time on it. But content for LP was completed and can be an advantage for a next page creation steps.

Create a brand new, shiny page will be the first task. 

Next part is **pages not related to shopping list and homepage**.
Right now these pages are inner pages. And they look like a default dashboard with bootstrap styles - and this is how they built.
I grab some styles, HTML templates from my previous projects.

These pages don't have a one simple UI at this moment. It's just a pages, that connected.
A lot of people confused about how they can use the product. 
So it can be different ways to accomplish this problem. It must be discussable with team members.

### Shopping list views.
Before i just get layouts and js code from TODOMVC and apply it. But it has some troubles with converting a logic. and it was not really optimized to mobiles. so when my friend starts joking about it - i spend few weeks and redo it basically from scratch. 
i find an HTML framework with styles related to mobile form elements and apply groceristar logic into that element.
Not sure if I want to redo it again. maybe it'll be better to implement a gap between Gs and some other TODO list projects. cause I don't want to reinvent the wheel - better to focus on expanding features of it.

## Can grocery list be moved into an app?
I need to find out - can we grab some logic from this frontend, copy-paste it and convert into React Native, cause I want to build an app in the future.
maybe I need to share with you some design starter kits, that have a lot of predefined pages and can be used in my project.
