# inventaire.minet.net

php project to manage the storage of electrical and IT equipment for the 
MiNET student network association

## Description

| *[general]*   | specific  |
| ------------- | --------- |
| *[object]*    | equipment |
| *[inventory]* | storage   |
| *[galery]*    | room      |

### Equipment

| property      | type   | constraints | comment     |
| ------------- | ------ | ----------- | ----------- |
| description   | String | notNull     |             |
| serialNumber  | String | notNull     |             |
| brand         | String | notNull     |             |
| model         | String | notNull     |             |
| type          | String | notNull     |             |
| macAddress    | String | notNull     |             |
| ipAddress     | String | notNull     |             |
| hostname      | String | notNull     |             |
| os            | String | notNull     |             |
| osVersion     | String | notNull     |             |


### Storage

| property      | type   | constraints | comment     |
| ------------- | ------ | ----------- | ----------- |
| description   | String | notNull     |             |

### Room

| property      | type   | constraints | comment     |
| ------------- | ------ | ----------- | ----------- |
| description   | String | notNull     |             |

### Relations

[inventaire] (1) — (0..n) [objet] : OneToMany (un [inventaire] contient 0 à n [objet])