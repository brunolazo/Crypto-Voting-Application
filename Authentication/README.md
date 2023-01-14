# Authentication

In the project's framework, a VOTO token will be assigned to a user, authorised by the vote organiser, who has successfully identified himself and will enable him to cast his vote by spending his VOTO token. The Voting Organiser will deploy the smart contract of a new ERC20 token (VOTO), which will be used to secure the right to vote. The deployment happens on Goerli, an Ethereum testing network, via Hardhat, an Ethereum development environment.

The smart contract of the VOTO token will be owned by the Ethereum account that released it (Voting Organiser), and only this will have the authorisation to coin and distribute new tokens.

Finally, a web page will be created containing a form, which the user who wants to obtain the VOTO token, will have to fill in with his personal data such as first name, surname, email and telephone number. These data will be compared with those on a database, and in the case there is a match with a tuple, and this has not previously been used to obtain a token, then a VOTO token will be distributed to an Ethereum address chosen by the voting user.
