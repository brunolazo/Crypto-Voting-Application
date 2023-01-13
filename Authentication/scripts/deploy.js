const hre = require("hardhat");

async function main() {
  const VotoToken = await hre.ethers.getContractFactory("VotoToken");
  const votoToken = await VotoToken.deploy();
  //const votoToken = await VotoToken.deploy("1000000000000000000000000000");

  await votoToken.deployed();

  console.log("Token deployed to:", votoToken.address);
}

main()
  .then(() => process.exit(0))
  .catch((error) => {
    console.error(error);
    process.exit(1);
  });