i know that current system is not ideal. Do you have an ideas, how we can make it better(example - I think favorite part is not). let's discuss this here


My question is how item and ingredient are different?


 my suggestion to improve the schema is if "ITEM" and "INGREDIENT" are kind of similar than we can normalize them. I am confused about "FAVOURITE".


 Ingredient - table that used at online GS version. Each time when user add ingredient to the list - we have a new row.

Item - a table that I plan to use in the next releases. Main goal: add measurements and flags/attributes to an ingredient. So each item can be milk (Ingredient) + 1 L (Qty and measurement) + 1 (ingredient stored at favorite list) + 1 (item is purchased at current shopping list)
So item have more advanced functionality

Favorite and purchased is a quite similar thing. But first is related to user(you can list all favorite ingredients or maybe items at user profile), purchased always related to grocery list - and you can list all purchased items by grocery list ID


Still I think ITEM and INGREDIENT has kind of similar functionality. So you can replace ITEM with advance version INGREDIENT.



Purchase can have favorite item coloumn.




give me more info about replacing ITEM with advanced ingredient. maybe
sample. this is an interesting idea - i don't think about it. let's think
about it. but if we replace ITEM - how you'll handle this case:
I add "1 L milk" - purchased - price $3
i also planed to have price tracker

not sure about mixing favorite with purchased... i mean if i buy "1 L
milk" and "300 ml of milk" - both will be purchased. but do we need to have
both this records in favorite or maybe save just milk?

Yeah that is true. Than we cannot mix purchase with favorite. I didn't considered quantity previously.


Yeah regarding price tracker I could not see price field anywhere.

Also when user buy same thing more than once. How it will be handled in Purchased?



if this will be stored at different grocery lists - there not problem. if
we add one ingredient(i.e. milk) twice - we'll calculate them
automatically. so 2 rows became one 1.3L of milk(if milk is similar)



Sorry to ask too many questions. But my question was purchased is the list of items stored somewhere. So every grocery list might be stored differently. Right? So what if user buy same item with same quantity on different dates. So there will be same row stored twice. just with different date. Rest of columns will have same values.

Example: "1 L mik" on "03/12/2018" by user " Jane Doe"
"1 L milk" on "03/13/2018" by user "Jane Doe"


Grocery table can eliminate Description field as it is already there in ingredient table.

Userfav table can have just GroceryId column and no ingredientId column. As Grocery table is already having ingredientId as foreign key.

User table can eliminate ingredientId field as it has groceryId field as foreign key. And it can have itemId field added as foreign key.



=========
план как хранить в базе уже использованные листы и как это сделать со стороны фронтенда

все айтемы станут purchased и выводить их потом уже без purchased или без цены

разобраться где я спрятал фавориты и отобразить их обратно на дев версии проекта

------

Если говорить о будущем расширении функционала - 
то это Measurements & Unit Convertion и автоматический гросерились 
- это то что интересно делать картинки и их поддержку мы пока не добавляем,
 но loopback имеет хороший туториал на эту тему





 
 GL
 * add
 * created from Main Menu(nothing was changed)
 * created from User Menu (GL not saved to db in this case)
 * if user want to add some products to GL - we create GL related to User Menu for this week
 * when user check ingredient(we assume he buy it) - this ingredient moved to Purchased. Purchased must have this information: qty / Date / notes/ place where it was buyed.



 
 Ingredient
 Field	Type	Description
 uri	string	Ontology identifier
 quantity	float	Quantity of specified measure
 measure	Measure	Measure
 weight	float	Total weight, g
 food	Food	Food

 NutrientInfo
 Field	Type	Description
 uri	string	Ontology identifier
 label	string	Display label
 quantity	float	Quantity of specified units
 unit	string	Units

 Measure
 Field	Type	Description
 uri	string	Ontology identifier
 label	string	Common name

 Food
 Field	Type	Description
 uri	string	Ontology identifier
 label	string	Common name
 ====
 
