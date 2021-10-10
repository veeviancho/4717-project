use f32ee;

insert into coffee values
  (1, "Just Java", "Endless Cup" 2.00),
  (2, "Cafe au Lait", "Single" 2.00),
  (3, "Cafe au Lait", "Double", 3.00),
  (4, "Iced Cappucino", "Single", 4.75),
  (5, "Iced Cappucino", "Double", 5.75);

insert into orders values
  (1, 3, "Cafe au Lait", 5),
  (2, 1, "Just Java", 2),
  (3, 2, "Cafe au Lait", 7),
  (4, 4, "Iced Cappucino", 17),
  (4, 3, "Cafe au Lait", 1);