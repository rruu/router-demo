CREATE DATABASE users;
USE users;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` char(30) DEFAULT NULL,
  `Password` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
INSERT INTO users (`Username`, `Password`) VALUES (('admin'), ('$2y$10$xGixWDLFsub0bTsXMgpey.ghX3DMx62B.I76pNMsF22wzsTsSqpqW'));
