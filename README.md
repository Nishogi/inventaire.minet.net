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

| property     | type   | constraints | comment                                                                |
|--------------|--------|-------------|------------------------------------------------------------------------|
| serialNumber | String | notNull     | primary key                                                            |
| type         | String | notNull     | options: switch, router, cable, server, computer, printer, screen, ... |
| brand        | String | notNull     | useful ? network devices are mainly cisco                              |
| model        | String | notNull     |                                                                        |
| isWorking    | Bool   | notNull     |                                                                        |
| inUse        | Bool   | notNull     |                                                                        |
| macAddress   | String | none        | if network device                                                      |
| ipv4         | String | none        | if network device in use                                               |
| ipv6         | String | none        | if network device in use and uses ipv6                                 |
| description  | String | notNull     |                                                                        |


### Storage

 --> correspond to the "bagagerie" in the MiNET jargon

| property      | type   | constraints | comment     |
| ------------- | ------ | ----------- | ----------- |
| description   | String | notNull     |             |

### Room

| property      | type   | constraints | comment     |
| ------------- | ------ | ----------- | ----------- |
| number        | String | notNull     | primaryKey  |
| description   | String | notNull     |             |

### Relations

storage (1) — (0..n) equipment : OneToMany (one [inventaire] contient 0 à n [objet])