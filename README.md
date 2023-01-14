# An e-voting system based on the Tornado Cash protocol

The aim of this study is the implementation of an electronic voting system based on blockchain technology, which fulfils the classic properties of an e-voting system.

The following objectives have been identified for the implementation of the system:
1. Distribution of a dedicated voting token:
	The idea is to implement the entire system within the Ethereum blockchain, creating a token that is distributed to an authorised user upon successful identification.
2. User anonymisation:
	We want to implement a coin mixer service that allows the depositing and withdrawal of the voting token in a decentralised and secure manner.
3. Dedicated voting dApp release:
	Finally, we aim to implement a web dApp allowing the user to vote by spending his voting token.
	
In the initial authentication phase, the voter will access a web page created in HTML connected to a MySQL database via PHP, in case of correct authentication, through JavaScript, will automatically be called the smart contract function of the voting token which will mint a new token and send it to an Ethereum address chosen by the voter.

There are then two web pages, created in HTML and PHP, which use JavaScript to interact with the smart contract pool and thus enable the deposit and withdrawal of the voting token and ETH.

Finally, through a web page in HTML using JavaScript's library "ethers.js", will be created a dApp that will allow voters to access their MetaMask wallet and then vote by sending their voting token to the smart contract dedicated to voting.
