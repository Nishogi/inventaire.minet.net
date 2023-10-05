# inventaire.minet.net

php project to manage the storage of electrical and IT equipment for the 
MiNET student network association

## Description

| *[general]*   | specific  |
|---------------|-----------|
| *[object]*    | equipment |
| *[inventory]* | room      |
| *[galery]*    | cluster   |

### Equipment

TBA <-> To Be Added

| property         | type   | constraints | comment                                                                |
|------------------|--------|-------------|------------------------------------------------------------------------|
| serialNumber     | String | notNull     |                                                                        |
| name             | String | notNull     |                                                                        |
| type             | String | notNull     | options: switch, router, cable, server, computer, printer, screen, ... |
| brand (TBA)      | String | notNull     | useful ? network devices are mainly cisco                              |
| model (TBA)      | String | notNull     |                                                                        |
| isWorking        | Bool   | notNull     |                                                                        |
| inUse (TBA)      | Bool   | notNull     |                                                                        |
| macAddress (TBA) | String | none        | if network device                                                      |
| ipv4    (TBA)    | String | none        | if network device in use                                               |
| ipv6   (TBA)     | String | none        | if network device in use and uses ipv6                                 |
| description      | String | notNull     |                                                                        |


### Room

| property    | type   | constraints | comment |
|-------------|--------|-------------|---------|
| name        | String | notNull     |         |
| description | String | notNull     |         |

### Cluster

| property    | type   | constraints | comment |
|-------------|--------|-------------|---------|
| access      | String | notNull     |         |
| description | String | notNull     |         |

### Relations

storage (1) — (0..n) equipment : OneToMany (one [inventaire] contient 0 à n [objet])