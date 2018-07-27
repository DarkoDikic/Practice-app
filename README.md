# SIMPLE PRACTICE WebSite
Created for purpose of practice, simple website with login,register and logout, and while logged in there is an option to upload photo ...

# Setting up
Download project as it is, if you use xampp you should create a folder (nameofproject) in htdocs(in wamp folder is called "www")
and after that in mysql database you should create new database called "practice" and run few queries :

```
CREATE TABLE `immage` (
  `idimage` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `imagename` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```


```
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `userName` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_lastname` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
```
-- Indexes for table `immage`

ALTER TABLE `immage`
  ADD PRIMARY KEY (`idimage`);
```
```
-- Indexes for table `user`

ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);
```
```
ALTER TABLE `immage`
  MODIFY `idimage` int(11) NOT NULL AUTO_INCREMENT;
```
```
-- AUTO_INCREMENT for table `user`

ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
```



