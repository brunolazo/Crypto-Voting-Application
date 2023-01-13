const { rpcUrl } = require('../config')
const Fetcher = require('./Fetcher')
const Sender = require('./sender')
//const { GasPriceOracle } = require('gas-price-oracle')
const web3 = require('./setupWeb3')
const fetcher = new Fetcher(web3)
const sender = new Sender(web3)
const gasPriceOracle = {
  low: '1',
  standard: '1',
  fast: '1',
  instant: '4'
}

module.exports = {
  fetcher,
  web3,
  sender,
  gasPriceOracle
}
