// SPDX-License-Identifier: GPL-3.0

pragma solidity ^0.8.0;

import "@openzeppelin/contracts/token/ERC20/ERC20.sol";
/*
contract VotoToken is ERC20{
    constructor(uint256 totalSupply) ERC20("VotoToken", "VOTO"){
        _mint(msg.sender, totalSupply);
    }
}
*/
/*
contract VotoToken is ERC20{
    constructor() ERC20("VotoToken", "VOTO"){
        _mint(msg.sender, 1*10**18);
    }
}
*/
import "@openzeppelin/contracts/access/Ownable.sol";

contract VotoToken is ERC20, Ownable{
    constructor() ERC20("VotoToken", "VOTO"){}

    function issueToken(address receiver) public onlyOwner{
        _mint(receiver, 1*10**18);
    }
}