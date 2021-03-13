CREATE TABLE user
(
    `user_id`        VARCHAR(255)    NOT NULL    COMMENT '저자 아이디', 
    `user_name`      VARCHAR(255)    NOT NULL    COMMENT '필명', 
    `user_password`  VARCHAR(255)    NOT NULL    COMMENT '성', 
    `user_nickname`  VARCHAR(255)    NOT NULL    COMMENT '이름', 
    `user_disease`   VARCHAR(255)    NOT NULL, 
    `user_grade`     INT(100)        NOT NULL, 
    `user_profile`   VARCHAR(255)    NOT NULL, 
    `user_keep`      INT(100)        NOT NULL, 
    `user_love`      INT(100)        NOT NULL, 
    PRIMARY KEY (user_id)
);