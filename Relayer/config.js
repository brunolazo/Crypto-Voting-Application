require('dotenv').config()

module.exports = {
  version: 2.7,
  netId: Number(process.env.NET_ID) || 5,
  redisUrl: process.env.REDIS_URL,
  rpcUrl: process.env.RPC_URL || 'https://goerli.infura.io/',
  oracleRpcUrl: process.env.ORACLE_RPC_URL || 'https://mainnet.infura.io/',
  oracleAddress: '0xA2b8E7ee7c8a18ea561A5CF7C9C365592026E374',
  privateKey: process.env.PRIVATE_KEY,
  mixers: {
    netId1: {
      eth: {
        mixerAddress: {
          '0.1': '0x12D66f87A04A9E220743712cE6d9bB1B5616B8Fc',
          '1': '0x47CE0C6eD5B0Ce3d3A51fdb1C52DC66a7c3c2936',
          '10': '0x910Cbd523D972eb0a6f4cAe4618aD62622b39DbF',
          '100': '0xA160cdAB225685dA1d56aa342Ad8841c3b53f291'
        },
        symbol: 'ETH',
        decimals: 18
      }
    },
    netId5: {
      eth: {
        mixerAddress: {
          '0.001': '0xc779eE19C88a2650c94C4958ccf436C597C2859b',
          '0.0015': '0xedB857246146300271Bde0DBE01A87Eb9000EA1D',
          '0.002': '0x13563a98ee15ed5633728731ba14ba258acf9373',
          '0.003': '0xc06cd2AFB66f96984f692dD43E9832906095462f',
          '0.004': '0x103FEE0279c14271C23031d2460da6A3b776716A',
          //'0.1': '0xC5e72b1A31bE82Fed3Ee76dB43d886A209fcD2b9',//mio
          //'0.1': '0x6Bf694a291DF3FeC1f7e69701E3ab6c592435Ae7',//default
          //'1': '0x3aac1cC67c2ec5Db4eA850957b967Ba153aD6279',
          //'10': '0x723B78e67497E85279CB204544566F4dC5d2acA0',
          //'100': '0x0E3A09dDA6B20aFbB34aC7cD4A6881493f3E7bf7'
        },
        symbol: 'ETH',
        decimals: 18
      },
      dvt: {
        mixerAddress: {
          '1': '0x797e1f8A3b00DDDE4E4319CE946D85905cdb9ef0'
        },
        tokenAddress: '0x26D50f9Cf1e4c6a1a09e2C56391Ec78D7EfC311b',
        symbol: 'DVT',
        decimals: 18
      }
    }
  },
  defaultGasPrice: 20,
  gasOracleUrls: ['https://ethgasstation.info/json/ethgasAPI.json', 'https://gas-oracle.zoltu.io/'],
  port: process.env.APP_PORT,
  relayerServiceFee: Number(process.env.RELAYER_FEE),
  maxGasPrice: process.env.MAX_GAS_PRICE || 200,
  watherInterval: Number(process.env.NONCE_WATCHER_INTERVAL || 30) * 1000,
  pendingTxTimeout: Number(process.env.ALLOWABLE_PENDING_TX_TIMEOUT || 180) * 1000,
  gasBumpPercentage: process.env.GAS_PRICE_BUMP_PERCENTAGE || 20
}
