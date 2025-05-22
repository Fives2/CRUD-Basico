# Databank

```
CREATE TABLE category (
    catcode SERIAL PRIMARY KEY,                  
    catdescription VARCHAR(100) NOT NULL,        
    catactive BOOLEAN NOT NULL DEFAULT TRUE      
);
```