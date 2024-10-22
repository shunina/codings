class Solution:
    # def kidsWithCandies(self, candies: List[int], extraCandies: int) -> List[bool]:
    #     i = 0
    #     length = len(candies)
    #     maxNum = max(candies)
    #     array = []
    #     while True:
    #         if i > length - 1:
    #             break
    #         if candies[i] + extraCandies >= maxNum:
    #             array.append(True)
    #             i = i + 1
    #             continue
    #         array.append(False)
    #         i = i + 1
    #     return array


  def kidsWithCandies(self, candies, extraCandies):
        # Find out the greatest number of candies among all the kids.
        maxCandies = max(candies)
        # For each kid, check if they will have greatest number of candies
        # among all the kids.
        result = []
        for i in range(len(candies)):
            result.append(candies[i] + extraCandies >= maxCandies)
        return result
