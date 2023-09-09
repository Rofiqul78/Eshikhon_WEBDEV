// Define inventory details
const cakeNames = [
    "Black Forest",
    "Vanilla Cake",
    "Red Velvet",
    "Chocolate Cake",
    "Lemon Sponge Cake",
  ];
  const materialCosts = [150, 160, 170, 180, 190];
  const transportationCost = 50;
  const spaceCost = 60;
  const staffCost = 70;
  const discountPercentage = 0.13;
  const sellingWeights = [5, 7, 9, 11, 13];
  const actualPrices = [800, 850, 900, 950, 1000];
  
  // Calculate inventory cost per pound for each cake
  const inventoryCostPerPound = cakeNames.map((cake, index) => {
    const materialCost = materialCosts[index];
    const totalCost = materialCost + transportationCost + spaceCost + staffCost;
    const utilityCost = 0.03 * (totalCost + transportationCost);
    const totalInventoryCost = totalCost + utilityCost;
    return totalInventoryCost / sellingWeights[index];
  });
  
  // Calculate total inventory cost for each cake
  const totalInventoryCostPerCake = cakeNames.map((cake, index) => {
    return inventoryCostPerPound[index] * sellingWeights[index];
  });
  
  // Calculate sale price after giving 13% discount for each cake per pound
  const salePricePerPound = actualPrices.map((price) => price * (1 - discountPercentage));
  
  // Calculate total profit per pound for each cake
  const totalProfitPerPound = cakeNames.map((cake, index) => {
    const salePrice = salePricePerPound[index];
    return salePrice - inventoryCostPerPound[index];
  });
  
  // Calculate total profit for each cake
  const totalProfitPerCake = cakeNames.map((cake, index) => {
    return totalProfitPerPound[index] * sellingWeights[index];
  });
  
  // Calculate percentage of profit for each cake
  const percentageProfitPerCake = cakeNames.map((cake, index) => {
    const profit = totalProfitPerCake[index];
    const totalInventoryCost = totalInventoryCostPerCake[index];
    return (profit / totalInventoryCost) * 100;
  });
  
  // Display results
  for (let i = 0; i < cakeNames.length; i++) {
    console.log(`Cake: ${cakeNames[i]}`);
    console.log(`1) Total Inventory Cost per Pound: $${inventoryCostPerPound[i].toFixed(2)}`);
    console.log(`2) Total Inventory Cost for ${sellingWeights[i]} Pounds: $${totalInventoryCostPerCake[i].toFixed(2)}`);
    console.log(`3) Sale Price per Pound (after 13% discount): $${salePricePerPound[i].toFixed(2)}`);
    console.log(`4) Total Profit per Pound: $${totalProfitPerPound[i].toFixed(2)}`);
    console.log(`5) Total Profit for ${sellingWeights[i]} Pounds: $${totalProfitPerCake[i].toFixed(2)}`);
    console.log(`6) Percentage of Profit: ${percentageProfitPerCake[i].toFixed(2)}%`);
    console.log("----------------------");
  }
  