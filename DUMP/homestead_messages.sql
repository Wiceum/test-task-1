create table messages
(
    id         int auto_increment
        primary key,
    author     text                               null,
    title      text                               null,
    summary    text                               null,
    text       text                               null,
    created_at datetime default CURRENT_TIMESTAMP not null
);

INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (1, 'admin', 'test', null, null, '2023-04-29 12:59:58');
INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (5, 'admin', 'Привет', null, null, '2023-04-29 13:04:38');
INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (6, null, '123', '123', '123', '2023-05-01 09:09:12');
INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (7, 'user_test', 'Test', '123', 'test test', '2023-05-01 10:18:37');
INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (8, 'user_test', 'TEST update', '123', '123123', '2023-05-01 12:41:05');
INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (10, 'admin', 'Большая статья', 'Первая большая статья', 'Кана́л До́ртмунд — Эмс (нем. Dortmund-Ems-Kanal (DEK)) — канал в Германии, соединяет речной порт города Дортмунд и город Эмден. Длина канала составляет 269 км.

Канал был открыт в 1899 году.', '2023-05-02 02:35:32');
INSERT INTO homestead.messages (id, author, title, summary, text, created_at) VALUES (11, 'admin', 'Еще одна статья', 'Какая-то статья', 'Харальд Фрич (нем. Harald Fritzsch; 10 февраля 1943, Цвиккау, Германия — 16 августа 2022, Мюнхен, Германия) — немецкий физик-теоретик, работавший в области физики элементарных частиц, профессор Мюнхенского университета[1][2].', '2023-05-02 05:28:53');