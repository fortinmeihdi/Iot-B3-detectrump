DELIMITER $$
CREATE PROCEDURE authentification(prm_mail varchar(256), prm_password varchar(256))
BEGIN
	if prm_mail is not null AND prm_password is not null 
		select * from `USER` 
        where USE_MAIL = prm_mail AND USE_PASSWORD = prm_password;
end $$

CREATE PROCEDURE get_sound(prm_box int)
BEGIN
		select SO_ID, SO_DATE from sound 
		where BOX_ID = prm_box;
end $$

CREATE PROCEDURE get_move(prm_box int)
BEGIN
		select MO_ID, MO_DATE from move 
		where BOX_ID = prm_box;
end $$

DELIMITER ;