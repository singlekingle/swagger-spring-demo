#import <Foundation/Foundation.h>
#import "SWGUser.h"

#import "SWGObject.h"



@interface SWGUsercompletepostcompleteApi: NSObject

-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGUsercompletepostcompleteApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(void) setBasePath:(NSString*)basePath;
+(NSString*) getBasePath;

/**

 create or update a user name by id
 saveUserComplete

 @param body user
 

 return type: SWGUser*
 */
-(NSNumber*) saveUserCompleteWithCompletionBlock :(SWGUser*) body 
    
    completionHandler: (void (^)(SWGUser* output, NSError* error))completionBlock;
    





@end