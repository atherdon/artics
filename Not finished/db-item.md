



=========
план как хранить в базе уже использованные листы и как это сделать со стороны фронтенда

все айтемы станут purchased и выводить их потом уже без purchased или без цены

разобраться где я спрятал фавориты и отобразить их обратно на дев версии проекта

------

Если говорить о будущем расширении функционала -
то это Measurements & Unit Convertion и автоматический гросерились
- это то что интересно делать картинки и их поддержку мы пока не добавляем,
 но loopback имеет хороший туториал на эту тему

-----




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
--
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
