CREATE TABLE bands
(
  bandid INT NOT NULL AUTO_INCREMENT,
  bandname VARCHAR(60) NOT NULL,
  PRIMARY KEY (bandid)
);
INSERT  INTO bands (bandid, bandname) 
VALUES 
(1, 'Deerhunter'),
(2, 'Cigarettes after sex'),
(3, 'The National'),
(4, 'Queens of the stone age'),
(5, 'Father John Misty');


CREATE TABLE stages
(
  stageid INT NOT NULL AUTO_INCREMENT,
  stagename VARCHAR(60) NOT NULL,
  PRIMARY KEY (stageid)
);
INSERT INTO stages (stageid, stagename)
VALUES 
(1, 'blue'),
(2, 'green'),
(3, 'red');


CREATE TABLE performs
(
  performid INT NOT NULL AUTO_INCREMENT,
  bandid INT NOT NULL,
  stageid INT NOT NULL,
  day DATE NOT NULL,
  PRIMARY KEY (performid),
  CONSTRAINT fk_bandid FOREIGN KEY (bandid) REFERENCES bands(bandid),
  CONSTRAINT fk_stageid FOREIGN KEY (stageid) REFERENCES stages(stageid)
);
INSERT INTO performs (performid, bandid, stageid, day)
VALUES
(1, 2, 1, 09.06.2017),
(2, 1, 2, 09.06.2017),
(3, 3, 3, 10.06.2017),
(4, 4, 1, 10.06.2017),
(5, 5, 3, 11.06.2017);
