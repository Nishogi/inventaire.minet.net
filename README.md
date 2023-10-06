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

| property           | type   | constraints | comment                                                                |
|--------------------|--------|-------------|------------------------------------------------------------------------|
| serialNumber (TBA) | String | notNull     |                                                                        |
| name               | String | notNull     |                                                                        |
| type               | String | notNull     | options: switch, router, cable, server, computer, printer, screen, ... |
| brand (TBA)        | String | notNull     | useful ? network devices are mainly cisco                              |
| model (TBA)        | String | notNull     |                                                                        |
| isWorking (TBA)    | Bool   | notNull     |                                                                        |
| inUse (TBA)        | Bool   | notNull     |                                                                        |
| macAddress (TBA)   | String | none        | if network device                                                      |
| ipv4    (TBA)      | String | none        | if network device in use                                               |
| ipv6   (TBA)       | String | none        | if network device in use and uses ipv6                                 |
| description        | String | notNull     |                                                                        |


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

room (1) — (0..n) equipment : OneToMany (one room contient 0 à n equipements)
member (0..n) — (0..n) room : ManyToMany (0 à n members contient 0 à n room)

> Correspond aux accès des différentes salles (par exemple salle serveur accessible par certains membres seulement et bagagerie par tout le monde). Il y a plusieurs salles accessibles pour un membre et une salle est accessible par plusieurs membres.
